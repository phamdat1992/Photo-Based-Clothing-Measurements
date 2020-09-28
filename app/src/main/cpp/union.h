#pragma once

void unionUpdate(int u, int v, int* lt)
{
	if (lt[u] != u)
	{
		unionUpdate(lt[u], v, lt);
	}

	lt[u] = v;
}

int unionGet(int u, int* lt)
{
	if (lt[u] != u)
	{
		lt[u] = unionGet(lt[u], lt);
		return lt[u];
	}
	else
	{
		return lt[u];
	}
}